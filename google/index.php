<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Google</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="v-autocompleter.css">
	<link rel="stylesheet" type="text/css" href="styleSearch.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="v-autocompleter.js"></script>
</head>
<!-- <body class="results"> -->
<body>
    <div id="app" :class="[isActive == 1 ? 'results' : 'home']"> 
        	<!-- homepage -->
      <nav>
      	<a href="#">Gmail</a>
      	<a href="#">Grafika</a>
      	<img src="googlemen.png">
      	<button>Zaloguj się</button>
      </nav>
      <section class="section-1">
      	<img src="googlelog.png" class="logo">
      	<form><br><br>
            
      		<div class="s-box">
                <img src="googleser.svg" class="search-icon">
                <!-- <v-autocompleter v-model="googleSearch" :options="cities" @enter="showResults"></v-autocompleter> -->
		<div id="app">
                {{ googleSearch }}
                <input type="text" v-model="googleSearch" @input="findResultsDebounced" />
                <div v-for="city in results" :key="city.name">
                <span class="name">{{ city.name }}</span>
                </div>
            	</div>
                <img src="googlekey.png" class="keyboard-icon">
      			<img src="googlemic.png" class="vs-icon">
                  
      			<!--
      			<input ref="first" v-model="googleSearch" list="listaMiast" type="text" class="search_input" @keyup.down="goDown()" @keyup.up="goUp()" @keyup.enter="clickEnter" />
                
                  <div class="cities">
                    <li v-for="(city,index) in filteredCities" @click="handleClick(city.name)" :class="{HighBack: index == forPick}">
                    <img class="glass" src="googleser.svg">
                    <div class="podpowiedzi" v-html="highlight(city.name)"></div>
                    </li>
                </div> -->
      			<input type="submit" class="s-btn" value="Szukaj w Google">
      			<input type="submit" class="s-btn" value="Szczęśliwy traf">
      		</div>
      	</form>
      </section>
      <footer>
      	<h4>Polska</h4>
      	<div class="links">
      		<div class="link-1">
      			<a href="#">O nas</a>
      			<a href="#">Reklamuj się</a>
      			<a href="#">Dla firm</a>
      			<a href="#">Jak działa wyszukiwarka</a>
      		</div>
              <div class="link-0">
                <img src="googleleaf.png" class="leaf-icon">
                <a href="#">Neutralność węglowa od 2007 roku</a>
            </div>
      		<div class="link-2">
      			<a href="#">Prywatność</a>
      			<a href="#">Warunki</a>
      			<a href="#">Ustawienia</a>
      		</div>
      	</div>
      </footer>



	<!-- results -->
	<div id="header">
        <div id="topbar">
            <img id="searchbarimage" src="googlelog.png" />
            <div id="searchbar" type="text">
                <input ref="second" id="searchbartext" type="text" v-model="googleSearch" />
                <button id="searchbarmic">
                    <img src="googlemic.png" />
                </button>
                <button id="searchbarbutton">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>
            <div id="right-side">
            <img src="googlemen.png">
            <button>Zaloguj się</button>
        </div>
        </div>
        <div id="optionsbar">
            <ul id="optionsmenu1">
                <li id="optionsmenuactive">Wszystko</li>
                <li>Wideo</li>
                <li>Grafika</li>
                <li>Książki</li>
                <li>Wiadomości</li>
                <li>Więcej</li>
            </ul>

            <ul id="optionsmenu2">
                <li>Ustawienia</li>
                <li>Narzędzia</li>
            </ul>
        </div>
    </div>
    <div id="searchresultsarea">
        <p id="searchresultsnumber">Około 1 030 000 000 wyników (0.56 s) </p>
        

        <div class="searchresult">
            <h2>HTML Tutorial - W3Schools > html</h2>
            <a>www.w3schools.com</a> <button>▼</button>
            <p>Well organized and easy to understand Web building tutorials with lots of examples of how to</p>
            <p> use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ...</p>
        </div>

        <div class="searchresult">
            <h2>HTML Tutorial - Tutorialspoint</h2>
            <a>www.tutorialspoint.com > html</a> <button>▼</button>
            <p>HTML Tutorial - HTML stands for Hyper Text Markup Language, which is the most widely used</p>
            <p>anguage on Web to develop web pages. HTML was created by ...</p>
        </div>

        <div class="searchresult">
            <h2>HTML For Beginners The Easy Way: Start Learning HTML... </h2>
            <a>html.com</a> <button>▼</button>
            <p>Our Other HTML Tutorials — By the end of this tutorial, you will have the know-how to create a</p>
            <p>basic website and we hope that this will ...</p>
        </div>

        <div class="searchresult">
            <h2>HTML - Naucz się pisać strony internetowe! | MDN</h2>
            <a>developer.mozilla.org > docs > Learn > HTML</a> <button>▼</button>
            <p><b>HTML</b> służy do określania, czy treść internetowa powinna być rozpoznawana jako akapit, lista,</p>
            <p>nagłówek, link, obraz, odtwarzacz multimedialny, formularz lub ...</p>
        </div>

        <div class="searchresult">
            <h2>HTML Tutorial: Learn HTML For Free | Codecademy</h2>
            <a>www.codecademy.com > learn > lea...</a> <button>▼</button>
            <p>In just 3 hours, learn basic HTML, the skeleton of all web pages, and place text on a page, add</p>
            <p>images & videos, and share data in HTML tables. This is the first ...</p>
        </div>

        <div class="searchresult">
            <h2>HTML Tutorial: HTML & CSS for Beginners - Zespół Szkół ...</h2>
            <a>zsrb.leszno.pl > Wszytskie kursy > CSS</a> <button>▼</button>
            <p>Oct 19, 2016 - Lets begin with defining some terms. Semaphore is one form of software implementation for process synchronization. It's an int value that is ...</p>
        </div>


        <div class="searchresult">
            <h2>Learn HTML Tutorial - javatpoint</h2>
            <a>www.javatpoint.com > html-tutorial</a> <button>▼</button>
            <p>Learn HTML Tutorial or HTML 5 Tutorial for beginners and professionals with tags, elements,</p>
            <p>tables, forms, anchor, image, heading, marquee, textarea, div, ...</p>
        </div>

        <div class="searchresult">
            <h2>Complete HTML Tutorial for beginners - Become a Master</h2>
            <a>www.coderepublics.com > HTML</a> <button>▼</button>
            <p>Want to learn HTML? Learn Complete HTML Tutorial for beginners and become an HTML</p>
            <p>Master. It's completely free. Explore features of HTML, HTML Tags, ...</p>
        </div>

        <div class="searchresult">
            <h2>Learn HTML - Free Interactive HTML Tutorial</h2>
            <a>www.learn-html.org</a> <button>▼</button>
            <p>learn-html.org is a free interactive HTML tutorial for people who want to learn HTML, fast.</p>
        </div>
        <div class="relatedsearches">
            <h3>Podobne wyszukiwania</h3>
            <div class="relatedlists">
                <ul class="relatedleft">
                    <li><b>HTML podstawy</b></li>
                    <li><b>HTML</b>tutorial <b>pl</b></li>
                    <li><b>CSS</b> tutorial</li>
                    <li><b>HTML & CSS</b> tutorial</li>
                </ul>
                <ul class="relatedright">
                    <li><b>notepad++</b> html</li>
                    <li><b>First steps in HTML</b></li>
                    <li><b>HTML tags</b></li>
                    <li><b>HTML code</b></li>
                </ul>
            </div>
        </div>

        <div class="pagebar">
            <ul class="pagelist">
                <li class="pagelistprevious">Poprzednia</li>
                <li class="pagelistfirst">1</li>
                <li class="pagelistnumber">2</li>
                <li class="pagelistnumber">3</li>
                <li class="pagelistnumber">4</li>
                <li class="pagelistnumber">5</li>
                <li class="pagelistnumber">6</li>
                <li class="pagelistnumber">7</li>
                <li class="pagelistnumber">8</li>
                <li class="pagelistnumber">9</li>
                <li class="pagelistnumber">10</li>
                <li class="pagelistnext">Następna</li>
            </ul>
        </div>
    </div>

    <div id="footer">
        <div id="footerlocation">
            <p>Polska </p>
            <p> - Z Twojej historii lokalizacji - Użyj dokładnej lokalizacji - Dowiedz się więcej</p>
        </div>

        <ul id="footermenu">
            <li>Pomoc</li>
            <li>Prześlij opinię</li>
            <li>Prywatność</li>
            <li>Warunki</li>
        </ul>
    </div>
    </div>
	<script>
    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: '',
            results: []
        },
        methods : {
            findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch)
                console.log(`http://localhost:8080/search?name=${this.googleSearch}`);
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                    });
            })
        }
    })
  	</script>
<!--     <script>
        var app = new Vue({
          el: '#app',
          data: {
            enterValues: [],
            cities: window.cities,
            isActive: 0,
            googleSearch: '',
          },
          methods: {
            showResults(newValue) {
                this.enterValues.push(newValue);
    
                if (this.isActive == 0) {
                    this.isActive = 1;
                } else{
                    this.$emit('input', '');
                    this.isActive = 0;
                }
            }
          },
        });
    </script> -->
</body>
</html>
