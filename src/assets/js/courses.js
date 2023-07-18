const section = document.querySelector('.courses');

const shoWMoreText = e => {
  const card = e.target.closest('li');
  const refs = {
    showMoreBtn: card.querySelector('[data-show-more]'),
    showLessBtn: card.querySelector('[data-show-less]'),
    moreText: card.querySelector('[data-more-text]'),
  };

  const isShowMoreBtn = e.target.hasAttribute('data-show-more');
  const isShowLessBtn = e.target.hasAttribute('data-show-less');

  if (isShowMoreBtn) {
    refs.moreText.classList.toggle('visually-hidden');
    refs.showMoreBtn.setAttribute('disabled', 'disabled');
  }
  if (isShowLessBtn) {
    refs.moreText.classList.toggle('visually-hidden');
    refs.showMoreBtn.removeAttribute('disabled');
  }
};

section.addEventListener('click', shoWMoreText);
