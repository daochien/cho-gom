import request from '@/utils/request';

export function addProduct(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/product/create',
            method: 'post',
            data: data
        })
        .then((response) => {
            if(response.status) {
                resolve(response.data);
            } else {
                reject(response)
            }
        })
        .catch((error) => {
            reject(error)
        })
    });
}

export function listProduct(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/product/products',
            method: 'get',
            params: data
        })
        .then((response) => {
            if(response.status) {
                resolve(response.data);
            } else {
                reject(response)
            }
        })
        .catch((error) => {
            reject(error)
        })
    });
}

export function removeProduct(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/product/remove',
            method: 'post',
            data: data
        })
        .then((response) => {
            if(response.status) {
                resolve(response.data);
            } else {
                reject(response.message)
            }
        })
        .catch((error) => {
            reject(error)
        })
    });
}

export function findProduct(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/product/find',
            method: 'post',
            data: data
        })
        .then((response) => {
            if(response.status) {
                resolve(response.data);
            } else {
                reject(response.message)
            }
        })
        .catch((error) => {
            reject(error)
        })
    });
}

export function updateProduct(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/product/update',
            method: 'post',
            data: data
        })
        .then((response) => {
            if(response.status) {
                resolve(response.data);
            } else {
                reject(response)
            }
        })
        .catch((error) => {
            reject(error)
        })
    });
}
