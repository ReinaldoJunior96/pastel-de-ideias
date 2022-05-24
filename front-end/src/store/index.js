import { createStore } from 'vuex'

export default createStore({
    state: {
        displayPedido: 'block',
    },
    mutations: {
        salvarPedido(){
            console.log('reinaldo')
            this.state.displayPedido = 'block';
        }
    }
})
