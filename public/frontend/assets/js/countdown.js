(function($) {
  "use strict";
  
  // Specify the deadline date
  const deadlineDate = new Date('Decembar 31, 2025 23:59:59').getTime();
  
  // Cache all countdown boxes into consts
  const countdownDays = document.querySelector('.countdown-days .number');
  const countdownHours= document.querySelector('.countdown-hours .number');
  const countdownMinutes= document.querySelector('.countdown-minutes .number');
  const countdownSeconds= document.querySelector('.countdown-seconds .number');
  
  // Update the count down every 1 second (1000 milliseconds)
  setInterval(() => {    
    // Get current date and time
    const currentDate = new Date().getTime();
  
    // Calculate the distance between current date and time and the deadline date and time
    const distance = deadlineDate - currentDate;
  
    // Calculations the data for remaining days, hours, minutes and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
    // Insert the result data into individual countdown boxes
    if(countdownDays) {
      countdownDays.innerHTML = days;
    }
    if(countdownHours) {
      countdownHours.innerHTML = hours;
    }
    if(countdownMinutes) {
      countdownMinutes.innerHTML = minutes;
    }
    if(countdownSeconds) {
      countdownSeconds.innerHTML = seconds;
    }
    
    
  }, 1000);
  
  
  })(jQuery);
  