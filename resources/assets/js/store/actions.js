import axios from 'axios'

export const fetchReviews = ({commit}, {limit = 20}) => {
  axios.get('http://product-reviews.dev/api/reviews')
    .then((response) => commit('setReviews', response.data))
}
