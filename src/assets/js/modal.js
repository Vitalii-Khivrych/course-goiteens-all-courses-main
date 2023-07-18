import jQuery from 'jquery';

jQuery(function () {
  const openModalBtn = document.querySelectorAll('[data-modal-open]');
  const modal = document.querySelector('[data-modal]');
  const closeModalBtn = document.querySelector('[data-modal-close]');
  const body = document.querySelector('body');

  openModalBtn.forEach(function (btn) {
    btn.addEventListener('click', e => {
      e.preventDefault();

      const course = btn.dataset.modalOpen;

      switch (course) {
        case 'scratch':
          window.productName = window.scratchName;
          window.productId = window.scratchId;
          break;

        case 'minecraft':
          window.productName = window.minecraftName;
          window.productId = window.minecraftId;
          break;

        case 'wix':
          window.productName = window.wixName;
          window.productId = window.wixId;
          break;

        case 'roblox':
          window.productName = window.robloxName;
          window.productId = window.robloxId;
          break;

        case 'design':
          window.productName = window.designName;
          window.productId = window.designId;
          break;

        case 'frontend':
          window.productName = window.frontendName;
          window.productId = window.frontendId;
          break;

        case 'gameDev':
          window.productName = window.gameDevName;
          window.productId = window.gameDevId;
          break;

        case 'python':
          window.productName = window.pythonName;
          window.productId = window.pythonId;
          break;

        default:
          window.productName = window.defaultName;
          window.productId = window.defaultId;
          break;
      }

      setTimeout(() => {
        toggleModal();
      }, 500);
    });
  });

  function toggleModal() {
    modal.classList.toggle('is-hidden');
    body.classList.toggle('scroll-hidden');
  }

  function handleKey(e) {
    if (!modal.classList.contains('is-hidden')) {
      if (e.key === 'Escape') {
        toggleModal();
      }
    }
    return;
  }

  function handleClose(e) {
    if (e.target === e.currentTarget) {
      toggleModal();
    }
    return;
  }

  document.addEventListener('keydown', handleKey);
  modal.addEventListener('mousedown', handleClose);
  closeModalBtn.addEventListener('click', toggleModal);
});
