// Animation Login Form
let current = null;
// tslint:disable-next-line: only-arrow-functions
document.querySelector('#email').addEventListener('focus', function(e) {
  if (current) { current.pause(); }
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
// tslint:disable-next-line: only-arrow-functions
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) { current.pause(); }
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
// tslint:disable-next-line: only-arrow-functions
document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) { current.pause(); }
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
