//Задаём переменную
let cat = document.getElementById('cat');
//Задаём коту фиксированное позиционирование
cat.style.position = 'fixed';
//Наш кот стремиться к центру курсора мыши
document.onmousemove = (event) => {
    cat.style.left = event.clientX - 75 + 'px';
    cat.style.top = event.clientY - 75 + 'px';
  }
  //Когда кот догоняет мышку
cat.onmouseover = () => alert('Мышка была поймана!');