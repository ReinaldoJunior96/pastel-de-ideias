import { createStore } from 'vuex'

export default createStore({
    state: {
        displayPedido: 'hidden',
    },
    mutations: {
        salvarPedido(){
            console.log('reinaldo')
            this.state.displayPedido = 'block';
        }
    }
})
