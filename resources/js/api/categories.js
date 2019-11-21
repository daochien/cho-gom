import request from '@/utils/request';

export function create(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/categories/create',
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


export function listCate(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/categories/categories',
            method: 'get'
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

export function update(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/categories/update',
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

export function remove(data) {
    return new Promise((resolve, reject) => {
        return request({
            url: '/categories/remove',
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
