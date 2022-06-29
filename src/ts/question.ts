export function question() {
  const questions = document.querySelectorAll('.question');

  const openQuestion = function(object: HTMLElement, index: number) {
    const btn = document.querySelectorAll('.ri-arrow-right-s-line')[index] as HTMLIFrameElement;

    object.addEventListener('click', () =>  {
      if (questions[index].classList.contains('question--disabled')) {
        questions[index].classList.remove('question--disabled');
        questions[index].classList.add('question--enabled');
        btn.classList.remove('ri-arrow-right-s-line');
        btn.classList.add('ri-arrow-down-s-line');
      } else {
        questions[index].classList.remove('question--enabled');
        questions[index].classList.add('question--disabled');
        btn.classList.remove('ri-arrow-down-s-line');
        btn.classList.add('ri-arrow-right-s-line');
      }
    });
  }

  for (let index = 0; index < questions.length; index++) {
    const question = document.querySelectorAll('.question')[index] as HTMLDivElement;
    openQuestion(question, index);
  }
}
