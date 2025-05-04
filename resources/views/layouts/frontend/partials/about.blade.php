    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>ABOUT US</h2>
          {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ uploaded_file($aboutus->image) }}" class="img-fluid img-thumbnail"
              style="width:100%"alt="">
              {{-- <button class="btn btn-success" >Learn More</button> --}}

            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
              {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
             <div id="content">
                <p class="fst-italic" id="fullText">
                    {!! $aboutus->about_us !!}
                    {{-- {{ $aboutus->about_us }} --}}
                   </p>
             </div>
              <p id="shortContent"></p>
              <a href="{{ route('about.index') }}" id="readMoreBtn" class="btn btn-success" onclick="toggleText()">Read More</a>
            </div>
          </div>

        </div>

      </section><!-- /About Section -->
<script>

const contentEl = document.getElementById("content");
const shortContentEl = document.getElementById("shortContent");
const readMoreBtn = document.getElementById("readMoreBtn");

const fullHTML = contentEl.innerHTML;
const fullText = contentEl.innerText.trim();
const charLimit = 790;
let isExpanded = false;

// Set up initial display
if (fullText.length > charLimit) {
  contentEl.style.display = "none";
  shortContentEl.innerText = fullText.slice(0, charLimit) + "...";
} else {
  readMoreBtn.style.display = "none"; // Hide button if text is short
}

function toggleText() {
  if (!isExpanded) {
    shortContentEl.style.display = "none";
    contentEl.style.display = "block";
    readMoreBtn.innerText = "Read Less";
  } else {
    shortContentEl.style.display = "block";
    contentEl.style.display = "none";
    readMoreBtn.innerText = "Read More";
  }
  isExpanded = !isExpanded;
}

</script>
