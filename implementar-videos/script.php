<script>

const sliders = document.querySelector(".carouselbox");
var scrollPerClick;
var ImagePadding = 20;

showMoviesData();

// Scroll Functionality
var scrollAmount = 0;

function sliderScrollLeft() {
  sliders.scrollTo({
    top: 0,
    left: (scrollAmount -= scrollPerClick),
    behavior: "smooth",
  });

  if (scrollAmount < 0) {
    scrollAmount = 0;
  }

  console.log("Scroll Amount: ", scrollAmount);
}

function sliderScrollRight() {
  if (scrollAmount <= sliders.scrollWidth - sliders.clientWidth) {
    sliders.scrollTo({
      top: 0,
      left: (scrollAmount += scrollPerClick),
      behavior: "smooth",
    });
  }
  console.log("Scroll Amount: ", scrollAmount);
}

// For showing dynamic contents only
async function showMoviesData() {
  const api_key = "47071116ad3913e09389a88eb1f895b6";
  var result = await axios.get(
    "https://api.themoviedb.org/3/discover/movie?api_key=" +
      api_key +
      "&primary_release_year=2017&sort_by=revenue.desc"
  );

  result = result.data.results;

  result.map(function (cur, index) {
    sliders.insertAdjacentHTML(
      "beforeend",
      // `<img class="img-${index} slider-img" src="http://image.tmdb.org/t/p/w185/${cur.poster_path}" /> `
      `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/MqzX9JAZ08U?autoplay=1&mute=1&rel=0&modestbranding=1&showinfo=0&controls=0&loop=1"
            title="YouTube video player" frameborder="0" autoplay loop muteds allowfullscreen
            allow="accelerometer; autoplay; muted; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>`
    );
  });

  scrollPerClick = 450;
}
</script>
