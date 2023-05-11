



HTML CSS JS 

Result
Skip Results Iframe

<section class="section intro">
<div class="container">
<h1>Horizontal Timeline v2 &rarr;</h1>
<p>Timeline v1 <a href="https://codepen.io/tutsplus/full/ZKpNwm" target="_blank">here</a></p>
</div>
</section>

<section class="timeline">
<div class="info">
<img width="50" height="50" src="https://assets.codepen.io/210284/face.svg" alt="" />
<h2>Company History</h2>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
<p>
    <a href="">Learn more &gt;</a>
</p>
</div>

<ol>
<li>
  <div>
    <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos.
  </div>
</li>
<li>
  <div>
    <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
  </div>
</li>
<li>
  <div>
    <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
  </div>
</li>
<li>
  <div>
    <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
  </div>
</li>
<li>
  <div>
    <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
  </div>
</li>
<li>
  <div>
    <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li>
  <div>
    <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
  </div>
</li>
<li></li>
</ol>

</section>

<footer class="page-footer">
<span>made by </span>
<a href="https://georgemartsoukos.com/" target="_blank">
<img width="24" height="24" src="https://assets.codepen.io/162656/george-martsoukos-small-logo.svg" alt="George Martsoukos logo">
</a>
</footer>



<script>

import { faker } from 'https://cdn.skypack.dev/@faker-js/faker';
  
window.addEventListener("DOMContentLoaded",() => {
const t = new Timeline(".timeline");
});

class Timeline {
articles = [];

constructor(el) {
this.el = document.querySelector(el);

this.init();
}
init() {
this.generateArticles();
this.removeLoading();
this.build();
this.observeArticles();
}
build() {
const itemContainer = this.el.querySelector("[data-items]");
if (!itemContainer) return;

const localeCode = "en-US";

this.articles.forEach(article => {
  const time = document.createElement("time");
  time.className = "timeline__item-time";

  const DRaw = new Date(article.date);
  const D = {
    y: DRaw.getFullYear(),
    m: DRaw.getMonth() + 1,
    d: DRaw.getDate()
  };

  if (D.m < 10) D.m = `0${D.m}`;
  if (D.d < 10) D.d = `0${D.d}`;

  time.setAttribute("datetime", `${D.y}-${D.m}-${D.d}`);

  const articleDateLocal = DRaw.toLocaleDateString(localeCode,{
    year: "numeric",
    month: "long",
    day: "numeric"
  });
  time.innerText = articleDateLocal;

  const link = document.createElement("a");
  link.className = "timeline__item-link";
  link.href = "#";
  link.innerText = article.title;

  const published = document.createElement("small");
  published.className = "timeline__item-pub";
  published.innerText = article.publisher;

  const item = document.createElement("li");
  item.className = "timeline__item";
  item.appendChild(time);
  item.appendChild(document.createElement("br"));
  item.appendChild(link);
  item.appendChild(document.createElement("br"));
  item.appendChild(published);

  itemContainer.appendChild(item);
});
}
generateArticles() {
const articleCount = 30;

try {
  for (let a = 0; a < articleCount; ++a) {
    const adjective = faker.company.catchPhraseAdjective();
    const noun = faker.company.catchPhraseNoun();

    this.articles.push({
      title: this.toTitleCase(`${adjective} ${noun}`),
      date: faker.date.past(10),
      publisher: faker.company.name(),
    });
  }
} catch (err) {
  console.log("Faker unavailable");
}
// reverse chronological order
this.articles.sort((a,b) => b.date - a.date);
}
observeArticles() {
this.observer = new IntersectionObserver(
  entries => { 
    entries.forEach(entry => {
      const { target } = entry;
      const itemIn = "timeline__item--in";

      if (entry.isIntersecting) target.classList.add(itemIn);
      else target.classList.remove(itemIn);
    });
  }, {
    root: null,
    rootMargin: "0px",
    threshold: 1
  }
);
// observe the items
const items = document.querySelectorAll(".timeline__item");
Array.from(items).forEach(item => {
  this.observer.observe(item);
});
}
removeLoading() {
const loading = this.el.querySelector("[data-loading]");
if (!loading) return;

this.el.removeChild(loading);
}
toTitleCase(title) {
return title.split(" ").map(word => word[0].toUpperCase() + word.substring(1)).join(" ");
}
}

</script>