<!-- creato figlio per non confonderlo con il main della milestone 1, non collego card.php a index-ajax.php -->
<main id="app" class="pb-6">
    <div class="container-60 py-4">
        <div class="row row-cols-5">
            <div v-for="card in cards" class="col">
                <div class="spotify-card p-3">
                    <img class="p-3" :src="card.poster" :alt="card.title">
                    <span class="title">{{card.title}}</span>
                    <span class="subtitle">{{card.author}}</span>
                    <span class="year">{{card.year}}</span>
                </div>
            </div>
        </div>
    </div>
</main>