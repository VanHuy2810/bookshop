<!-- <footer class="footer"> -->
                                <div class="row mb footer">Copyright © 2023</div>
                            
                    
              
        <!-- </footer> -->
        <Style>
/* .footer {
    overflow:hidden;
    position: relative;
    
} */



.footer {
    background-color: #CDF5FD;
    border: 1px solid;
    font-size: 1vw;
    border-radius: 5px;
    color: #7714b9;
    padding: 20px;
}
.row {
    float: left;
    width: 100%;
}

          </style>

    <!-- js cho slideshow -->
    <script>
        let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

    </script>
</body>
</html>