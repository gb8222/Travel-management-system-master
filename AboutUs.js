
const showMoreLink = document.getElementById('showMoreLink');
const hiddenContent = document.getElementById('hiddencontent');

showMoreLink.addEventListener('click',function () {
    hiddenContent.style.display = (hiddenContent.style.display === 'none') ? 'block' : 'none';

    showMoreLink.textContent = (hiddenContent.style.display === 'none') ? 'Read More' : 'Read Less';
});