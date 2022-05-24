import { createStore } from 'vuex'

export default createStore({
    state: {
        displayPedido: 'hidden',
        pedido:{
            titulo: '',
            sabor: '',
            valor: 0,
            descricao: '',
        }
    },
    mutations: {
        salvarPedido(state, payload){
            this.state.displayPedido = 'block';
            console.log(payload)
            //this.state.pedido.titulo =
        }
    }
})
