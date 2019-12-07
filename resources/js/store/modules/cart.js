import {search} from '@/utils/helpers.js';

const keyCartLocal = 'chogom_cart';

const state = {
    carts: JSON.parse(localStorage.getItem(keyCartLocal)) ? JSON.parse(localStorage.getItem(keyCartLocal)) : []
}

const getters = {
    getCarts(state) {
        return state.carts;
    },
    totalPrice(state) {
        let total = 0;
        state.carts.forEach((item) => {
            total = total + (item.quantity * item.price);
        });
        return total;
    }
}

const mutations = {
    setCarts(state, item) {
        if(state.carts) {
            let itemExist = search(item.product_id, state.carts);
            if(!itemExist) {
                state.carts.push(item);
            } else {
                state.carts[itemExist.index].quantity = state.carts[itemExist.index].quantity + 1
            }
        } else {
            state.carts.push(item);
        }

        localStorage.setItem(keyCartLocal, JSON.stringify(state.carts));
    },
    resetCarts(state) {
        state.carts = [];
        localStorage.removeItem(keyCartLocal);
    }
}

const actions = {
    addToCart({commit}, payload) {
        commit('setCarts', payload);
    },
    removeAllCart({commit}) {
        commit('resetCarts');
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
};
