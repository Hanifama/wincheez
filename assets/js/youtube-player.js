const videoTrigger = document.getElementById('videoTrigger');
const videoModal = document.getElementById('videoModal');
const closeModal = document.getElementById('closeModal');
const modalIframe = document.getElementById('modalIframe');

videoTrigger.addEventListener('click', function () {
    videoModal.classList.remove('hidden');
    modalIframe.src = "https://www.youtube.com/embed/bdy77LCzC5E?autoplay=1";
});

closeModal.addEventListener('click', function () {
    videoModal.classList.add('hidden');
    modalIframe.src = ""; 
});