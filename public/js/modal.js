const closeModalButton = document.getElementById('closeModal');
if (closeModalButton) {
    closeModalButton.addEventListener('click', function () {
        const popup = document.getElementById('popup-modal');
        popup.classList.add('hidden');
        popup.classList.remove('flex');
    });
}