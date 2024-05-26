

/* ======================================
      FOR ADDING AND VIEWING MODAL
========================================*/

const overlay = document.querySelector('.overlay');
const addBtn = document.querySelector('.add-student-btn');
const closeBtn = document.querySelector('.close-btn');
const closeBtnView = document.querySelector('.close-btn-view');


try {
  closeBtnView.addEventListener('click', () => {
    location.href="http://localhost:8000/";
  })
} catch (error) {
  console.log('nothing in here');
}

/* ======================================
        FOR MESSAGING MODAL
========================================*/

const msg = document.querySelector('.message');
// console.log(msg);
try {
  let msgType = msg.dataset.messagetype;
  window.addEventListener('DOMContentLoaded', () => {
    // console.log(msg);
    if(msgType == 'success'){
      msg.style.color = '#3d3d3d';
      msg.style.backgroundColor = '#96FE8A';
      msg.classList.add('message-active');
    }
  
    if(msgType == 'error'){
      msg.style.backgroundColor = '#F96F6F';
      msg.classList.add('message-active');
    }
  
    setTimeout(() => {
      msg.classList.remove('message-active');
    }, 2000);
  })
  
} catch (e) {
  console.log('Nothing in here');
}

console.log('helo');