<div class="bg-warning">
    <div class="footer d-flex justify-content-between p-4">
        <div class="footer_item">
            <p>Контактные информации</p>
            <ul class="m-0 p-0">
                <li class="d-flex align-items-center">
                    <img src="img/город 1.png" class="d-flex" alt="">
                    <p class="m-0">г. Саратов, ул. Политехническая, 77</p>
                </li>
                
                <li  class="d-flex align-items-center"> 
                    <img src="img/телефон 1.png" class="d-flex"alt="">
                    <p class="m-0">+7 (8452) 99-87-15</p>
                </li>
                <li  class="d-flex align-items-center">
                    <img src="img/почта 1.png" class="d-flex" alt="">
                    <p class="m-0">kumovasv@sstu.ru</p>
                 </li>
            </ul>
        </div>
         <div class="footer_item">
            <p>Наши соц. сети</p>
            <ul class="d-flex list-unstyled">
                <li>
                    <a href="#">
                        <img src="img/телеграм 1.png" alt="">
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <img src="img/вк 1.png" alt="">
                    </a>
                </li>
            </ul>
         </div>
    </div>
</div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slider-item');
    const prevBtn = document.querySelector('.left .btn');
    const nextBtn = document.querySelector('.right .btn');
    
    let currentIndex = 0;
    const visibleSlides = 2;
    
    function updateSlider() {
        slides.forEach((slide, index) => {
            if (index >= currentIndex && index < currentIndex + visibleSlides) {
                setTimeout(() => {
                    slide.classList.add('active');
                }, 50);
            } else {
                slide.classList.remove('active');
            }
        });
    }
    
    function nextSlide() {
        if (currentIndex < slides.length - visibleSlides) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }
    
    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = slides.length - visibleSlides;
        }
        updateSlider();
    }
    
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    updateSlider();
});
</script>

</body>
</html>