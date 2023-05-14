



<DOCTYPE html>
  <head>
  <link href="recut.css" rel="stylesheet">
  </head>
  <body>
    
  <section class="section intro">
<div class="container">
<h1>RECRUITMENT</h1>
<p>Hiring processes made eassy.</p>
</div>
</section>

<section class="timeline">
<div class="info">
<img width="50" height="50" src="https://assets.codepen.io/210284/face.svg" alt="" />
<h2>Recruitment steps</h2>
<p>Process helps hire the right sort of candidates. <br>Following these steps.</p>

</div>

<ol>
<li>
  <div>
    <time>1.Job Requriement</time> Company will see what job are vacant and they will plan for advertising the available job for you.<br><br><br>
  </div>
</li>
<li>
  <div>
    <time>2.Sourcing</time>  Proactive searching for qualified job candidates for current or planned open positions; it is not the reactive function of reviewing resumes and applications sent to the company in response to a job posting or pre-screening candidates.
  </div>
</li>
<li>
  <div>
    <time>3.Screening</time>  Reviewing resumes and cover letters, conducting video or phone interviews and then identifying the top candidates.<br><br><br>
  </div>
</li>
<li>
  <div>
    <time>4.Interview</time>  A conversation with one or more persons acting as the role of an interviewer who ask questions and the person who answers the questions acts as the role of an interviewee.<br><br>
  </div>
</li>
<li>
  <div>
    <time>5.Selecting</time> Assessing candidates' qualities, expertise and experience to narrow down the pool of applicants until you're left with the best person for the role.<br><br><br>
  </div>
</li>
<li>
  <div>
    <time>6.Verification</time> To review the employment history of a borrower, to determine the borrower's job stability and cross-reference income history with that stated on the Uniform Residential Loan Application.<br>
  </div>
</li>
<li>
  <div>
    <time>7.Hiring</time> The employee and the company enter into a contract which states all the terms and conditions which the company specifies and which are to be adhered to by the new employee.
  </div>
</li>
<li>
  <div>
    <time>8.Joining Formalities</time> The formalities that an employer follows when recruiting new employees. These formalities are important as they help in making a good impression on the candidate and also help in building a good working relationship with them.
  </div>
</li>

<li></li>
</ol>

</section>
<section class="container section-2">
  <div class="flex-container">
    <div class="slogan-2">
      <p class="manage">Recruitment&nbsp;Management</p><br>
      <p class="recruitment"> When the organization looks to make a hire, recruiters within the HR <br>department
         assume this responsibility by creating job listings, screening <br>candidates and setting up interviews.
         Recruiting is competitive, especially <br>for candidates with high-demand technical skills, and it is driving interest in <br>sophisticated recruiting systems.<br><span style="color: #141414; ">OUR SERVICE IS ALWAYS OPEN, APPLY FOR YOUR FUTURE.</span></p><br>
         <a class="btn-2" href="/form">Apply</a>
      
    </div>
    <div class="HR-img2">
      <img class="img2" src="https://images.shiksha.com/mediadata/shikshaOnline/mailers/2021/naukri-learning/oct/28oct/What-is-Recruitment.jpg">
    </div>
  </div>
</section>
  </body>


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