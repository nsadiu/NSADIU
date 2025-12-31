# 🔧 Setup Guide for Windows

## Step 1: Install Git

### Option A: Download Git (Recommended)
1. Go to: https://git-scm.com/download/win
2. Download "64-bit Git for Windows Setup"
3. Run the installer
4. Use default settings (just keep clicking "Next")
5. Click "Install"
6. Close and reopen PowerShell/Terminal

### Option B: Install via Winget (if available)
```powershell
winget install --id Git.Git -e --source winget
```

### Verify Installation
After installing, close and reopen PowerShell, then run:
```powershell
git --version
```

---

## Step 2: Configure Git (First Time Only)
```powershell
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"
```

---

## Step 3: Initialize Repository
```powershell
# Navigate to your project (if not already there)
cd "C:\Users\WAJEEHAN COMPUTER\NSADIU"

# Initialize Git
git init

# Add all files
git add .

# Make first commit
git commit -m "Initial commit - NSA-DIU Application"
```

---

## Step 4: Create GitHub Repository

1. Go to: https://github.com/new
2. Repository name: `nsa-diu`
3. Keep it Public or Private (your choice)
4. **Don't** check "Add a README file"
5. Click "Create repository"

---

## Step 5: Push to GitHub

Replace `YOUR_USERNAME` with your GitHub username:

```powershell
git remote add origin https://github.com/YOUR_USERNAME/nsa-diu.git
git branch -M main
git push -u origin main
```

You'll be prompted to login to GitHub.

---

## Step 6: Deploy on Render.com

1. Go to: https://render.com
2. Sign up/Login with GitHub
3. Click "New +" → "Blueprint"
4. Select your `nsa-diu` repository
5. Render will detect `render.yaml`

### Add Environment Variables:

In your web service settings → Environment tab, add:

```
APP_NAME=NSA-DIU
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:YOUR_KEY_HERE
APP_URL=https://your-app.onrender.com
```

To generate `APP_KEY`, run locally:
```powershell
php artisan key:generate --show
```

6. Click "Apply" to deploy

---

## 🎉 You're Done!

Your site will be live in 5-10 minutes at:
`https://nsa-diu.onrender.com` (or your chosen name)

---

## 📝 Notes

- The `render-build.sh` file permissions will be handled automatically by Render
- No need to worry about chmod on Windows
- Render handles Linux permissions during deployment

---

## 🆘 Need Help?

**Git Issues:**
- Restart PowerShell after installing Git
- Make sure Git is in your PATH

**GitHub Login:**
- You may need to authenticate via browser
- Or create a Personal Access Token

**Render Issues:**
- Check the deployment logs in Render dashboard
- Ensure all environment variables are set correctly
