function localization() {
  console.log(1);
  let page = document.querySelector('.tg-comments');
  let count = page.querySelector('.tgme_post_discussion_header');
  console.log(count);
  document.body.innerHTML = document.body.innerHTML.replace(/target string/g, "replacement string");
}
