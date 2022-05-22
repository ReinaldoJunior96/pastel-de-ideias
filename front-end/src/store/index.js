import { createStore } from 'vuex'

export default createStore({
    state: {
        displayPedido: 'hidden',
    },
    mutations: {
        salvarPedido(){
            state.displayPedido = 'block';
        }
    }
})
