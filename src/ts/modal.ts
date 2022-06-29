export function modal() {
  async function img() : Promise<void> {

    const key : string | number = 'oS-c_ixrGWSoRiIbETcuB4b0J7C8RVt1YSTm8B9ITNM';
    const singup = document.querySelector('#singup__img') as HTMLDivElement | null;
    const login = document.querySelector('#login__img') as HTMLDivElement  | null;

    const res = await fetch(`https://api.unsplash.com/photos/random/?query=tech&count=2&client_id=${key}`);
    const data = await res.json();
    console.log(data);

    singup!.style.backgroundImage = 'url(' + data[0].urls.regular + ')';
    login!.style.backgroundImage = 'url(' + data[1].urls.regular + ')';
  }
  img()

  // open modal's
  const openSingUp = document.querySelectorAll('.singup') as NodeListOf<HTMLElement>;
  for (let index = 0; index < openSingUp.length; index++) {
    openSingUp[index].addEventListener('click', () => {
      const modalContainer = document.querySelector('.modal__container') as HTMLDivElement;
      modalContainer.classList.remove('modal__container--disabled');
      modalContainer.classList.add('modal__container--enabled');

      const modalPopup = document.querySelector('.modal__popup') as HTMLDivElement;
      modalPopup.classList.remove('modal__popup--disabled');
      modalPopup.classList.add('modal__popup--enabled');
    });
  }

  const openLogin = document.querySelector('.login') as HTMLDivElement;
  openLogin.addEventListener('click', () => {
    const modalContainer = document.querySelectorAll('.modal__container') as NodeListOf<HTMLElement>;
    modalContainer[1].classList.remove('modal__container--disabled');
    modalContainer[1].classList.add('modal__container--enabled');

    const modalPopup = document.querySelectorAll('.modal__popup') as NodeListOf<HTMLElement>;
    modalPopup[1].classList.remove('modal__popup--disabled');
    modalPopup[1].classList.add('modal__popup--enabled');
  });

  // close modal's
  const closeModal = document.querySelectorAll('.ri-close-line') as NodeListOf<HTMLElement>;
  
  for (let index = 0; index < closeModal.length; index++) {
    closeModal[index].addEventListener('click', () => {
      const modalContainer = document.querySelectorAll('.modal__container') as NodeListOf<HTMLElement>;
      modalContainer[index].classList.remove('modal__container--enabled');
      modalContainer[index].classList.add('modal__container--disabled');
  
      const modalPopup = document.querySelectorAll('.modal__popup') as NodeListOf<HTMLElement>;
      modalPopup[index].classList.remove('modal__popup--enabled');
      modalPopup[index].classList.add('modal__popup--disabled');
    });
  }

  // Check password
  const inputPassword = document.querySelector('#password') as HTMLInputElement;
  const checkPassword = document.querySelector('#checkPassword') as HTMLInputElement;
  const btnSingUp = document.querySelector('#btnSingUp') as HTMLButtonElement;
  const p = document.querySelector('#check') as HTMLParagraphElement;

  inputPassword.addEventListener('input', function():void {
    console.log(inputPassword.value);
    if(inputPassword.value.match(/[A-Z]{1,}/) && inputPassword.value.match(/[0-8]{1,}/) && inputPassword.value.match(/([#?!@$%^&*/\.;'"-]{1,})/) && inputPassword.value.length >= 8) {
      p.style.color = '#5C7EFD';
    } 
    else if(inputPassword.value === '') {
      p.style.color = '#A9A5A6';
    }
    else {
      p.style.color = '#FF6B81';
    }
  })

  checkPassword.addEventListener('input', function():void {
    if(checkPassword.value === inputPassword.value) {
      btnSingUp.type = 'submit';
    } else {
      btnSingUp.type = 'reset';
    }
  })
}
