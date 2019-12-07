<template>
    <div class="aside-filter clearfix">
        <div class="heading hidden-sm hidden-xs">
            Tìm theo:
        </div>
        <div class="aside-hidden-mobile">
            <div class="filter-container">

                <aside :class="['aside-item filter-vendor', filterSelected === 'filter-vendor' ? 'active': '']">
                    <div class="aside-title" @click="selectedFilter('filter-vendor')">
                        Thương hiệu
                    </div>
                    <div class="aside-content filter-group">
                        <ul class="filter-vendor">

                            <li class="filter-item filter-item--check-box filter-item--green" v-for="(vendor, key) in filter.vendor" :key="key">
                                <label data-filter="elmich" :for="'filter-'+vendor.value" class="elmich">
                                    <input type="checkbox" :id="'filter-'+vendor.value" :value="vendor.value" v-model="search.vendor">
                                    <i class="fa"></i> {{ vendor.name }}
                                </label>
                            </li>

                        </ul>
                    </div>
                </aside>

                <aside :class="['aside-item filter-price', filterSelected === 'filter-price' ? 'active': '']">
                    <div class="aside-title" @click="selectedFilter('filter-price')">
                        Giá sản phẩm
                    </div>
                    <div class="aside-content filter-group">
                        <ul>

                            <li class="filter-item filter-item--check-box filter-item--green" v-for="(price, key) in filter.price" :key="key">
                                <span>
                                    <label :for="'filter-'+price.value">
                                        <input type="checkbox" :id="'filter-'+price.value"  :value="price.value" v-model="search.price">
                                        <i class="fa"></i>
                                        {{ price.name }}
                                    </label>
                                </span>
                            </li>

                        </ul>
                    </div>
                </aside>

                <div class="clearfix"></div>
                <div class="filter-containers">
                    <div class="filter-container__selected-filter">
                        <div class="filter-container__selected-filter-list clearfix">
                            <ul>
                                <li class="filter-container__selected-filter-item" for="filter-goldseee">
                                    <a href="javascript:void(0)" onclick="removeFilteredItem('filter-goldseee')"><i class="fa fa-close"></i>
								    Goldseee
								    </a>
                                </li>
                            </ul>
                            <a href="javascript:void(0)" class="filter-container__clear-all" title="Bỏ hết">Bỏ hết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            filterSelected: '',
            search: {
                vendor: [],
                price: []
            },
            filter: {
                vendor: [
                    {
                        name: 'Elmich',
                        value: 'Elmich'
                    },
                    {
                        name: 'Fivestar',
                        value: 'Fivestar'
                    },
                    {
                        name: 'Kangaroo',
                        value: 'Kangaroo'
                    }
                ],
                price: [
                    {
                        name: 'Giá dưới 100.000đ',
                        value: '1'
                    },
                    {
                        name: '100.000đ - 200.000đ',
                        value: '2'
                    },
                    {
                        name: '200.000đ - 300.000đ',
                        value: '3'
                    },
                    {
                        name: '300.000đ - 500.000đ',
                        value: '4'
                    },
                    {
                        name: '500.000đ - 1.000.000đ',
                        value: '5'
                    }
                ]
            }
        }
    },
    methods: {
        selectedFilter(type) {
            if(this.filterSelected === type) {
                this.filterSelected = '';
            } else {
                this.filterSelected = type;
            }
        }
    }
}
</script>
<style lang="scss" scoped>

</style>
