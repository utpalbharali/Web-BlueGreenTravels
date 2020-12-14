
const dropdownContainer = document.querySelectorAll('.dropdown-container');
const dropdownMain = document.querySelector('.dropdown-main');
const btnMonth = document.querySelector('#btn-month');
const btnDays = document.querySelector('#btn-days');
const btnDaysDropdown = document.querySelector('.btn-days-dropdown');
const btnMonthDropdown = document.querySelector('.btn-month-dropdown');


btnMonth.addEventListener('click', btnMonthClick);
btnDays.addEventListener('click', btnDaysClick);
//on mouse hover
// dropdownContainer.addEventListener('mouseover', addClass);

dropdownContainer.forEach(function (item) {
  item.addEventListener('mouseover', addClass);
  item.addEventListener('click', dropdownClick);
  item.addEventListener('mouseout', dropClass);
});

//on click
// dropdownContainer.addEventListener('click', dropdownClick);

//on mouse out
// dropdownContainer.addEventListener('mouseout', dropClass);

function addClass(e) {
  console.log(e.target);
  dropdownMain.classList.add('d-flex', 'flex-row');
  e.preventDefault();
}

function dropClass(e) {
  dropdownMain.classList.remove('d-flex', 'flex-row');
}

function dropdownClick(e) {
  dropdownMain.classList.toggle('d-flex');
}

function btnMonthClick(e) {

  if (btnDaysDropdown.classList.contains('d-flex')) {
    btnDaysDropdown.classList.remove('d-flex');
  }

  const ul = document.querySelector('.btn-month-dropdown ul');

  // btnMonthDropdown.style.display = 'block';
  btnMonthDropdown.classList.add('d-flex');

  ul.addEventListener('click', function (e) {
    if (e.target.tagName === 'BUTTON') {
      btnMonth.setAttribute('value', e.target.value);
      //toggle or remove
      btnMonthDropdown.classList.remove('d-flex');
    }
  });
  // const ul = document.querySelector('.btn-month-dropdown ul');

  // // btnMonthDropdown.style.display = 'block';
  // btnMonthDropdown.classList.add('d-flex');

  // ul.addEventListener('click', function (e) {
  //   if (e.target.tagName === 'BUTTON') {
  //     btnMonth.setAttribute('value', e.target.value);
  //     //toggle or remove
  //     btnMonthDropdown.classList.remove('d-flex');
  //   }
  // });
}

function btnDaysClick(e) {

  if (btnMonthDropdown.classList.contains('d-flex')) {
    btnMonthDropdown.classList.remove('d-flex');
  }

  const ul = document.querySelector('.btn-days-dropdown ul');

  // btnDaysDropdown.style.display = 'block';
  btnDaysDropdown.classList.add('d-flex');

  ul.addEventListener('click', function (e) {
    if (e.target.tagName === 'BUTTON') {
      btnDays.setAttribute('value', e.target.value);
      //toggle or remove
      btnDaysDropdown.classList.remove('d-flex');
    }
  });

}