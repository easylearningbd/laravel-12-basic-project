<div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/assets/images/shape/shape1.svg') }}" alt="">
  </div>
  <div class="lonyo-section-padding2 position-relative">
    <div class="container">

      @php
        $title = App\Models\Title::find(1);
      @endphp

      <div class="lonyo-section-title center">
         
        <h2 id="features-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $title->id }}">{{ $title->features }}</h2>
      </div>

      @php
        $features = App\Models\Feature::latest()->limit(6)->get();
      @endphp

      <div class="row">
        @foreach ($features as $item)
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>{{ $item->title }}</h4>
              <img src="{{ asset('frontend/assets/images/v1/'.$item->icon.'.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>{{ $item->description }}</p>
            </div>
          </div>
        </div> 
          
        @endforeach

        
      </div>
    </div>
    <div class="lonyo-feature-shape"></div>
  </div>

  {{-- CSRF Token  --}}
  <meta name="csrf-token" content="{{ csrf_token() }}" >

  <script>
   document.addEventListener("DOMContentLoaded", function(){
     const titleElement = document.getElementById("features-title"); 

     function saveChanges(element) {
       let featuresId = element.dataset.id;
       let field = element.id === "features-title" ? "features" : "";
       let newValue = element.innerText.trim();

       fetch(`/edit-features/${featuresId}`,{
         method: "POST",
         headers: {
           "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),"Content-Type": "application/json"
         },
         body: JSON.stringify({ [field]:newValue })
       })
       .then(response => response.json())
       .then(data => {
         if(data.success) {
           console.log(`${field} updated successfully`);
         }
       })
       .catch(error => console.error("Error:", error)); 
     }

     // Auto save on Enter Key
     document.addEventListener("keydown", function(e){
       if (e.key === "Enter") {
         e.preventDefault();
         saveChanges(e.target);
       }
     });

     // Auto save on losing foucs
     titleElement.addEventListener("blur", function () {
       saveChanges(titleElement);
     });
 
   });
  </script>