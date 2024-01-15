// Example modal
const myModal = document.getElementById('exampleModal');
const myInput = document.getElementById('exampleTriggerModal');

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
});