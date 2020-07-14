import styled from 'styled-components';
import theme from '../../../theme/theme';

const HeaderStyled = styled.header`
  
  display: flex;
  flex-direction: row;
  justify-content: space-between;

  div.logo {
    position: absolute;
    z-index: 21;
    left: 0;
    height: 89px;
    width: 89px;
    padding: 5px;
    text-align: center;
    background-color: ${theme.colors.orange};
    border: 1px solid ${theme.colors.black};
    box-sizing: content-box;

    img {
      height: 90%;
    }
  }

  div.menu {
    z-index: 20;
    position: fixed;
    right: 0;
    text-align: right;
    
    nav.closedMenu {
      display: none;
    }

    nav.openMenu {
      display: block;
      background-color: ${theme.colors.orange};
      width: 100vw;
      position: fixed;
      z-index: 19;
      left: 0;
      top: 0;
      border-bottom: 1px solid ${theme.colors.black};

      ul {
        text-align: center;
        margin-top: 2em;

        li {
          margin: 1em 0;
          font-size: 1.2em;
          a {
            text-decoration: none;
            color: white;

            :hover {
              text-decoration: underline;
            }
          }
        }
      }
    }


    button {
      background-color: ${theme.colors.orange};
      border: 1px solid ${theme.colors.black};
      padding: 1.5em;
      transition: transform .5s;
      position: relative;
      z-index: 20;

      :hover {
        span.squares-menu {
          transform: rotate(45deg);

          div.square {
            border: 4px solid white;
          }
        }
      }

      span.squares-menu {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        height: 39px;
        width: 39px;
        transition: .5s;

        div.square {
          height: 10px;
          width: 10px;
          border: 4px solid white;
          border-radius: 7px;
          transition: all .5s;
          box-sizing: content-box;
        }
      }
    }
  }
  
`;

export default HeaderStyled;