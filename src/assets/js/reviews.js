// Handling video playback on play button click
const videoReviewsList = document.querySelectorAll('div[data-type="video"]');

for (let i = 0; i < videoReviewsList.length; i += 1) {
  const playButton = videoReviewsList[i].querySelector('button[data-link]');

  const handleClick = e => {
    videoReviewsList[
      i
    ].innerHTML = `<iframe frameborder="0" width='100%' height='100%' allowfullscreen src="${e.currentTarget.dataset.link}"></iframe>`;

    playButton.removeEventListener('click', handleClick);
  };

  playButton.addEventListener('click', handleClick);
}

// Handling more reviews load
const reviewList = document.querySelector('ul[data-reviews-list]');

const hiddenElements = reviewList.getElementsByClassName('hidden');

const loadMoreButton = document.querySelector('button[data-load-more]');

const handleLoadMoreClick = () => {
  let counter = 0;

  while (counter < 4 && hiddenElements.length > 0) {
    hiddenElements[0].classList.remove('hidden');
    counter += 1;
  }

  if (hiddenElements.length < 1) {
    loadMoreButton.classList.add('hidden');
    loadMoreButton.removeEventListener('click', handleLoadMoreClick);
  }
};

loadMoreButton.addEventListener('click', handleLoadMoreClick);
