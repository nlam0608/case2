<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            UPDATE Product
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="book-name">Name</label>
                    <input type="text" class="form-control" id="book-name" name = "name" value = <?php echo $book['name'] ?> placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="book-author">Author</label>
                    <input type="text" class="form-control" id="book-author" name="author" value = <?php echo $book['author'] ?> placeholder="Enter author">
                </div>

                <div class="form-group">
                    <label for="book-category">Category</label>
                    <input type="text" class="form-control" id="book-category" name="category" value = <?php echo $book['category'] ?> placeholder="Enter category">
                </div>

                <div class="form-group">
                    <label for="book-desc">Description</label>
                    <textarea type="text" class="form-control" id="book-desc" name="desc" placeholder="Enter desc"><?php echo $book['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php?page=book-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>