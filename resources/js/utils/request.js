import axios from 'axios';

const service = axios.create({
    baseURL: process.env.MIX_BASE_API,
    timeout: 10000,
});

// Request intercepter
service.interceptors.request.use(
    config => {
        config.headers['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        return config;
    },
    error => {
        // Do something with request error
        Promise.reject(error);
    }
);

// response pre-processing
service.interceptors.response.use(
    response => {
        return response.data;
    },
    error => {
        let message = error.message;
        if(error.response.data && error.response.data.errors)
        {
            message = error.response.data.errors;
        }
        else if (error.response.data && error.response.data.error)
        {
            message = error.response.data.error;
        }

        return Promise.reject(error);
    }
);

export default service;
