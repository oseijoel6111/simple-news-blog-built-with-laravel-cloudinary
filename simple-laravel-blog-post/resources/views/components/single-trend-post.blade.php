@props(['propName'])

<div class="item">
    <div class="post-entry d-lg-flex">
        <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
            <a href="/single">
                <img src="{{ asset('frontend_assets/images/post_lg_4.jpg') }}" alt="Image" class="img-fluid">
            </a>
        </div>
        <div class="content align-self-center">
            <div class="post-meta mb-3">
                <a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> &mdash;
                <span class="date">July 2, 2020</span>
            </div>
            <h2 class="heading"><a href="/single">Your most unhappy customers are your
                    greatest source of learning.</a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                Consonantia, there live the blind texts. Separated they live in
                Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            </p>
            <a href="#" class="post-author d-flex align-items-center">
                <div class="author-pic">
                    <img src="{{ asset('frontend_assets/images/person_1.jpg') }}" alt="Image">
                </div>
                <div class="text">
                    <strong>Sergy Campbell</strong>
                    <span>CEO and Founder</span>
                </div>
            </a>
        </div>
    </div>
</div>
