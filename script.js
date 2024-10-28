document.getElementById('learn-more').addEventListener('click', function() {
    alert('Привет, я Анастасия! Спорт - моя страсть. Со мной ты сделаешь фигуру своей мечты. Я помогу составить тебе план тренировок и меню для похудения или набора мышечной массы!');

})

//Плавная анимация кнопки при загрузке страницы
window.onload = function () {
    const button = document.getElementById('learn-more');
    button.style.opacity = '0';
    setTimeout(function() {
        button.style.transition = 'opacity 1.5s';
        button.style.opacity = '1';
    }, 500);
};

//Бургер-меню

console.log('Скрипт загружен');

const burgerMenu = document.querySelector('.burger-menu');
const menu = document.querySelector('.menu');
burgerMenu.addEventListener('click', () => {
    menu.classList.toggle('active');
});
