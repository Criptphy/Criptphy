// css
import '../css/style.css';

export function settings() {
  // open modal's
  const openEditConta = document.querySelector('#editConta') as HTMLDivElement;
  openEditConta.addEventListener('click', () => {
   
    const modalContainer = document.querySelector('#container1') as HTMLDivElement;
    modalContainer.classList.remove('modal__container--disabled');
    modalContainer.classList.add('modal__container--enabled');

    const modalPopup = document.querySelector('#popupsm1') as HTMLDivElement;
    modalPopup.classList.remove('modal__popupsm--disabled');
    modalPopup.classList.add('modal__popupsm--enabled');    
  });

  const openDeleteConta = document.querySelector('#deleteConta') as HTMLDivElement;
  openDeleteConta.addEventListener('click', () => {    
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
}
settings()
