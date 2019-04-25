<template>
    
    <div v-bind:class="'col-sm-'+ (sm || '6') + ' col-md-'+ (md || '4')">
        <div class="thumbnail">
            <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="...">
            <div class="caption">
                <small>{{data | formataData}} - {{autor}}</small>
                <h3>{{titulo}}</h3>
                <p>{{descricao}}</p>
                <p><a v-bind:href="link" class="btn btn-primary" role="button">Leia mais</a></p>
            </div>
        </div>
    </div>
            
</template>

<script>
    export default {
        props:['titulo','descricao','link','imagem','data','autor','sm','md'],
        filters: {
            formataData: function(valor){
                if(!valor) return '';
                valor = valor.toString();
                valor = valor.split('-');
                return valor[2] + '/' + valor[1] + '/' + valor[0];
            }
        }
    }
</script>