document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting
  
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          var cardContainer = document.createElement('div');
          cardContainer.innerHTML = xhr.responseText;
          document.getElementById('overlay').appendChild(cardContainer);
          document.getElementById('overlay').classList.add('show');
  
          // Stop GIF from playing after it's loaded once
          var gif = document.getElementById('gif');
          gif.src = gif.src; // Reset the source to stop the animation
        } else {
          console.error('Error loading card content.');
        }
      }
    };
    xhr.open('GET', 'card.html', true);
    xhr.send();
  });
  