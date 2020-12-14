<template>
<div class="q-my-xl">
    <q-card>
        <q-card-title>Create new product</q-card-title>
        <q-card-main>
            <q-field :count="250">
                <q-input float-label="Title" v-model="productName" max-length="250" />
            </q-field>
            <q-field>
                <div class="q-pa-md">
                    <q-btn-dropdown color="primary" label="Color" v-model="productColor">
                    <q-list>
                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Black</q-item-label>
                        </q-item-section>
                        </q-item>

                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>White</q-item-label>
                        </q-item-section>
                        </q-item>

                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Gray</q-item-label>
                        </q-item-section>
                        </q-item>

                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Green</q-item-label>
                        </q-item-section>
                        </q-item>
                    </q-list>
                    </q-btn-dropdown>
                </div>
            </q-field>
            <q-field>
                <div class="q-pa-md">
                    <q-btn-dropdown color="primary" label="Brand" v-model="productBrand">
                    <q-list>
                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Sony</q-item-label>
                        </q-item-section>
                        </q-item>

                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Samsung</q-item-label>
                        </q-item-section>
                        </q-item>

                        <q-item clickable v-close-popup @click="onItemClick">
                        <q-item-section>
                            <q-item-label>Apple</q-item-label>
                        </q-item-section>
                        </q-item>
                    </q-list>
                    </q-btn-dropdown>
                </div>
            </q-field>
            <q-field>
                <q-input float-label="Price" v-model="productTitle" max-length="250" />
            </q-field>
            <q-field :count="5000">
                <q-input
                    type="textarea"
                    float-label="Description"
                    v-model="productDescription"
                    :max-height="100"
                    rows="5"
                />
            </q-field>
            <q-field helper="Supported format: JPG, max. file size: 300KiB" class="q-mt-lg">
                <q-uploader float-label="Images" multiple extensions=".jpg" auto-expand/>
            </q-field>
        </q-card-main>
        <q-card-actions class="q-mt-md">
            <div class="row justify-end full-width docs-btn">
                <q-btn label="Cancel" flat to="/products/index"/>
                <q-btn label="Create" color="primary" @click="createProduct"/>
            </div>
        </q-card-actions>
    </q-card>
</div>
</template>

<style lang="stylus">
.docs-btn .q-btn
    padding 15px 20px
</style>

<script>
import axios from 'axios'

export default {
  data () {
    return {
      productTitle: '',
      productDescription: '',
      productRating: '',
      productSpecs: '',
      productColor: '',
      productBrand: '',
      productPrice: '',
      productCategory: ''
    }
  },
  methods: {
    createProduct () {
      axios
        .post(`http://127.0.0.1:8000/api/products`, this.productData)
        .then(response => {
          this.$q.notify({ type: 'positive', timeout: 2000, message: 'The product has been created.' })
          this.$router.push({ path: '/products/' + response.data.id + '/edit' })
        })
        .catch(error => {
          this.$q.notify({ type: 'negative', timeout: 2000, message: 'An error has been occured.' })
          console.log(error)
        })
    }
  },
  computed: {
    productData: function () {
      return {
        title: this.productTitle,
        description: this.productDescription,
        rating: this.productRating,
        specs: this.productSpecs,
        color: this.productColor,
        brand: this.productBrand,
        price: this.productPrice,
        category: this.productCategory }
    }
  }
}
</script>
