// css
import '../css/style.css';

export function manager() {
  // open modal's
  const openCreateSenha = document.querySelector('.button__add') as HTMLDivElement;
  openCreateSenha.addEventListener('click', () => {
    const modalContainer = document.querySelector('#container1') as HTMLDivElement;
    modalContainer.classList.remove('modal__container--disabled');
    modalContainer.classList.add('modal__container--enabled');

    const modalPopup = document.querySelector('#popupsm1') as HTMLDivElement;
    modalPopup.classList.remove('modal__popupsm--disabled');
    modalPopup.classList.add('modal__popupsm--enabled');    
  });

  const openEditSenha = document.querySelector('.edit-senha') as HTMLDivElement;
  openEditSenha.addEventListener('click', () => {
    const modalContainer = document.querySelector('#container2') as HTMLDivElement;
    modalContainer.classList.remove('modal__container--disabled');
    modalContainer.classList.add('modal__container--enabled');

    const modalPopup = document.querySelector('#popupsm2') as HTMLDivElement;
    modalPopup.classList.remove('modal__popupsm--disabled');
    modalPopup.classList.add('modal__popupsm--enabled');    
  });

  // close modal's
  const closeModal = document.querySelectorAll('.ri-close-line') as NodeListOf<HTMLElement>;
  
  for (let index = 0; index < closeModal.length; index++) {
    closeModal[index].addEventListener('click', () => {
      const modalContainer = document.querySelectorAll('.modal__container')[index] as HTMLDivElement;
      modalContainer.classList.remove('modal__container--enabled');
      modalContainer.classList.add('modal__container--disabled');

      const modalPopup = document.querySelectorAll('.modal__popup')[index] as HTMLDivElement;
      modalPopup.classList.remove('modal__popup--enabled');
      modalPopup.classList.add('modal__popup--disabled');
    });
  }

    
  // copy btn
  const btnCopy = document.querySelectorAll('.copy') as NodeListOf<HTMLAnchorElement>;
  const value = document.querySelectorAll('.value') as NodeListOf<HTMLInputElement>;
  
  for (let i = 0; i < btnCopy.length; i++) {
    btnCopy[i].addEventListener('click', () => {
      navigator.clipboard.writeText(value[i].defaultValue);
    })
  }
}
manager()
