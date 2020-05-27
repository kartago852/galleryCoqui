<template>
    <div class="container">
        <table class="table table-bordered table-dark">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <!--@foreach ($imagenes as $imagen)-->
                <tr v-for="imagen in imagenes.data">
                    <th scope="row">{{ imagen.id }}</th>
                    <td>{{ imagen.nombre }}</td>
                    <td>{{ imagen.categoria_nombre}}</td>
                    <td>
                        <div class="float-left">
                            <a v-bind:href="'images/'+imagen.imagen " data-lightbox="gallery">
                                <button type="button" class="btn btn-success float-right">Ver Imagen</button>
                            </a>
                        </div>
                    </td>
                    <td>
                        <li>
                            <!-- <a href="{{ route('admin.edit', $imagen->id) }}"><button type="button"
                                class="btn btn-primary">Editar</button></a> -->
                            <!--@include('admin.modal-edit')-->
                        </li>

                        <!--<form action="{{ route('admin.destroy', $imagen->id) }}" method="POST">-->
                            <!--@csrf-->
                            <!--@method('DELETE')-->
                            <!--<button type="submit" class="btn btn-danger">Eliminar</button>-->
                        <!--</form>-->
                    </td>
                </tr>
                <!--@endforeach-->
            </tbody>
        </table>
        <!--<div class="row">
            <div class="mx-auto">
                <!--{{ $imagenes->links()}}-->
            <!--</div>-->
        <!--</div>-->
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
        axios.get('http://127.0.0.1:8000/admin').then(response => (this.imagenes = response.data))
        this.getResults();
    },
    methods: {
        getResults(page = 1) {
			axios.get('http://127.0.0.1:8000/admin?page=' + page).then(response => {
					this.imagenes = response.data;
				});
		}

    },
}
</script>
