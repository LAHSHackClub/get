
<script lang="ts">
  import Header from "./_header.svelte";
  import Footer from "./_footer.svelte";
</script>

<Header />
<main class="container">
  <h2>A Web Presence for Clubs</h2>
  <p>Any Los Altos High School club can get a <b>branded web presence</b> courtesy of LAHS Hack Club. Get a <b>free lahs.club</b> domain for your website, which is easy and fast to remember. It's great for promoting on social media or on posters! We sponsor a variety of options and support for every club, whether you have a website already or not.</p>
  <br>
  <h2>New Flexible Options</h2>
  <p>New to GET, we have options to meet your club where it's at.</p>
  <div class="flex-smart cards">
    <div class="flex">
      <h3>Keep Your Site</h3>
      <p>Keep your existing Google, Wix, or other site and get a <b>free lahs.club</b> domain as a fast shortcut.</p>
    </div>
    <div class="flex">
      <h3>Make a New Site</h3>
      <p>Learn to make and manage a new site without any code, with help from one of our members!</p>
    </div>
    <div class="flex">
      <h3>Custom</h3>
      <p>Need more, or already have code to deploy? We can help! Requires dual club membership.</p>
    </div>
  </div>
  <br>
  <h2>Requirements</h2>
  <p>To request a site or a domain, you must be the acting president of the club in question <b>and</b> must have your club advisor's approval. You agree that any information published on your club's site reflects the MVLA school district as a whole.</p>
  <br>
  <p class="cta"><a href="">Submit a Request ></a></p>
</main>
<Footer />

<style>
  a {
    text-decoration-color: #fffa;
  }
  h2, h3 {
    margin-top: 15px;
    margin-bottom: 6px;
  }
  h2 {
    background-color: #34b;
    border-radius: 5px;
    color: #fff;
    font-size: 1.5rem;
    max-width: fit-content;
    margin-top: 50px;
    margin-bottom: 15px;
    padding: 5px 20px;
  }
  h3 {
    font-size: 1.3rem;
  }
  p {
    font-size: 1rem;
    margin: 0;
    margin-top: 5px;
  }
  .cta {
    background-color: #e38;
    border-radius: 10px;
    font-weight: bold;
    font-size: 1.2rem;
    margin: 50px 0;
    padding: 15px 20px;
    width: fit-content;
    transition-duration: 0.2s;
  }
  .cta:hover {
    box-shadow: #e38 0 0 20px;
  }
  .cta a {
    color: #fff;
    padding: 25px 60px;
  }
  .cards {
    column-gap: 20px;
    row-gap: 20px;
    margin-top: 20px;
  }
  .cards h3 {
    margin-top: 0;
  }
  .cards > * {
    background-color: #eee;
    border-radius: 5px;
    padding: 20px;
  }
</style>