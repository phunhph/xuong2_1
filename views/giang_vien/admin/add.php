<main class="sach">
    <div class="ttSach-admin">
        <form action="index.php?act=giang_vien&nt=add" method="post">
            <label for="">ten giảng viên</label>
            <input type="text" name="ten_moi">
            <label for="">account</label>
            <input type="text" name="account">
            <label>email</label>
            <input type="email" name="email">
            <label>password</label>
            <input type="password" name="password">
            <select name="role">
                <option value="0">user</option>
                <option value="1">admin</option>
            </select>
            <button type="submit">Đăng</button>
        </form>
    </div>
</main>