import {search} from '@/utils/helpers.js';

const keyCartLocal = 'chogom_cart';

const state = {
    carts: JSON.parse(localStorage.getItem(keyCartLocal)) ? JSON.parse(localStorage.getItem(keyCartLocal)) : [],
    lastItem: Object
}

const getters = {
    getCarts(state) {
        return state.carts;
    },
    getLastItem(state) {
        return state.lastItem;
    },
    totalPrice(state) {
        let total = 0;
        state.carts.forEach((item) => {
            total = total + (item.quantity * item.price);
        });
        return total;
    },
    totalQuantity() {
        let total = 0;
        state.carts.forEach((item) => {
            total = total + item.quantity;
        });
        return total;
    }
}

const mutations = {
    setCarts(state, item) {
        state.lastItem = item;

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
    },

    removeCart(state, product_id) {
        if(state.carts.length > 0) {
            let index;
            state.carts.forEach((cart, i) => {
                if(cart.product_id == product_id) {
                    index = i;
                }
            });
            state.carts.splice(index, 1);
            localStorage.setItem(keyCartLocal, JSON.stringify(state.carts));
        }
        
    }
}

const actions = {
    addToCart({commit}, payload) {
        commit('setCarts', payload);
    },
    removeAllCart({commit}) {
        commit('resetCarts');
    },
    removeItemCart({commit}, payload) {
        commit('removeCart', payload)
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
};
