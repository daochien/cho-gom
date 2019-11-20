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
