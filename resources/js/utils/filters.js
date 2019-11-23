import Vue from 'vue';

function numberFormat(value) {
    var number = parseInt(value);
    if(isNaN(number)) {
        return value;
    }
    var formatter = new Intl.NumberFormat('it-IT', {
        style: 'currency',
        currency: 'VND',
        minimumFractionDigits: 0
    });
    return formatter.format(number);
}

function limitString(value) {
    if(value.length < 20) {
        return value;
    } else {
        return value.substring(0, 20) + '...';
    }
}
Vue.filter('limitString', limitString);
Vue.filter('numberFormat', numberFormat);
