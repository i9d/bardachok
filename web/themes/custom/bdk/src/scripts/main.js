import polyfills from './polyfills';

(() => {
  polyfills();
})();

// You can use dynamic import if you want
// For example
//
// document.addEventListener('click', async () => {
//   const { selectAll } = await import('./helpers')
//   console.log(selectAll('a'))
// })
