<template>
<div>
        <div v-for="imagen in imagenes.data" v-bind:class="'item-gallery isotope-item bo-rad-10 hov-img-zoom ' + imagen.categoria_nombre">
            <img v-bind:src="'images/' + imagen.imagen" v-bind:alt="imagen.imagen">

            <div class="overlay-item-gallery trans-0-4 flex-c-m">
                <a class="btn-show-gallery flex-c-m fa fa-search" v-bind:href="'images/' + imagen.imagen"
                    data-lightbox="gallery"></a>
            </div>
        </div>
            <pagination :data="imagenes" @pagination-change-page="getResults"></pagination>
</div>
</template>

<script>
export default {
    data() {
        return {
            imagenes: {}
        }
    },
    mounted() {

        axios.get('http://127.0.0.1:8000/gallery').then(response => (this.imagenes = response.data)).catch(error => console.log(error));

        this.getResults();
    },
    methods: {
        getResults(page = 1) {
			axios.get('http://127.0.0.1:8000/gallery?page=' + page).then(response => {
					this.imagenes = response.data;
				});
		}

    }
}
</script>
