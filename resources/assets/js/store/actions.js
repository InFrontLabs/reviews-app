import axios from 'axios'

export const fetchReviews = ({commit}, {limit = 20}) => {
  axios.get('http://product-reviews.dev/api/reviews')
    .then((response) => commit('setReviews', response.data))
}

export const fetchScores = ({commit}) => {
  axios.get('http://product-reviews.dev/api/scores')
    .then((response) => {
      commit('setScores', response.data.scores)
      commit('setAverage', response.data.average)
    })
}
