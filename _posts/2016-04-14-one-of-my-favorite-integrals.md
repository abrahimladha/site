---
layout: post
date: 2016-04-14 12:00	
title: One of my favorite integrals.
published: true
---
One of the counterexamples that was proposed by Cauchy to LaGranges functional idea was $$e^{-x^2}$$. This function, when integrated only has a series solution that cannot be represented by aanother function. You can however, evaluate it as a definite integral from $$-\infty$$ to $$\infty$$

Let 

\begin{equation}
I = \int_{-\infty}^{\infty} e^{-x^2}
\end{equation}

It might be easier to evaluate its square, so lets do that instead.

\begin{equation}
I^2 = \int_{-\infty}^{\infty} e^{-x^2}dx \int_{-\infty}^{\infty} e^{-y^2}dy = 
\end{equation}

\begin{equation}
\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} e^{-x^2}e^{-y^2}dx dy =  
\end{equation}

\begin{equation}
\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} e^{-(x^2 + y^2)}dxdy
\end{equation}

Well notice that $$dxdy$$ is really $$dA$$ and if we switch to polar, $$-(x^2 + y^2) = -r^2$$

\begin{equation}
\int_{-\infty}^{\infty} \int_{-\infty}^{\infty} e^{-(x^2 + y^2)}dxdy = 
\end{equation}

\begin{equation}
\int_{0}^{\infty} \int_{0}^{2\pi} e^{-r^2}rdrd\theta
\end{equation}

Now we can do a $$u$$ substition. Let $$u = -r^2$$ and $$du = -2r dr$$.

\begin{equation}
\int_{0}^{\infty} \int_{0}^{2\pi} e^{-r^2}rdrd\theta
\end{equation}

\begin{equation}
- \frac{1}{2} \int_{0}^{2\pi} \int_{0}^{-\infty} e^u du d\theta = 
\end{equation}

\begin{equation}
- 2\pi \frac{1}{2} \int_{0}^{-\infty} e^u du =
\end{equation}

\begin{equation}
-\pi e^{-r^2} \bigg|_{0}^{\infty}
\end{equation}

\begin{equation}
-\pi(e^\infty - e^0) = \pi
\end{equation}


Since $$I^2 = \pi$$, then $$I = \sqrt{\pi}$$. To summarize:

\begin{equation}
\int_{-\infty}^{\infty} e^{-x^2}dx = \sqrt{\pi}
\end{equation}

This is like the coolest thing Ive ever seen for a few reasons. It looks maliciously easy, especially to calc I students. Integrals and derivatives of $$e$$ are supposed to be easy. This also has a lot of applications in statistics with the gaussian.I haven't taken a course in probability yet so I don't really know. Theres also a neat trick where Feynman uses $$ae^{-x^2}$$ to derive an approximation of Schrodingers equation. 

This post was also really just a testing ground to see if I could get mathjax working. It looks sucessful.  
