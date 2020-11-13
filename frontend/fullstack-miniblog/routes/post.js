const express = require('express')
const router = express.Router()
const Post = require('../models/Post')
router.get('/', async(req, res) =>{
    Post.find({}).then(() =>{

    })
    const posts = await Post.find({})
    res.status(200).json(posts)
})
router.post('/', async(req, res) =>{
    const postData = {
        title: req.body.title,
        text: req.body.text
    }

const post = new Post(postData)
await post.save()
res.status(201).json(post)
})

router.delete('/:postId', async(req, res) =>{
    await Post.remove({_id: req.params.postId})
    res.status(200).json({
        message: 'deleted'
    })
})

module.exports = router